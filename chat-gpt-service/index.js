
const { Configuration, OpenAIApi } = require("openai");
const express = require("express");
const bodyParser = require('body-parser');
const cors = require('cors');
const app = express();
const RSS = require('rss');
const fs = require('fs');
const crypto = require('crypto');



const feed = new RSS({
    title: 'Title',
    feed_url: 'https://ssur.uk/chatgpt/feed.xml',
    site_url: 'https://ssur.uk/chatgpt/',
    description: 'Chat GPT Schedule',
});
image_url =[]
text = []

const configFile = fs.readFileSync("./config.json");
const config = JSON.parse(configFile);
const port = config.port;
const hostName = config.hostname;

const configuration = new Configuration({
    organization: config.openai_org,
    apiKey: config.openai_api_key,
});

const openai = new OpenAIApi(configuration);

app.use(bodyParser.json());
app.use(cors());

app.listen(port, () => {
    console.log(`App listening at http://${hostName}:${port}`)
});

app.get('/', async (req,res) =>{
    res.send("welcome");
})


// post to the OpenAI API a completion request
app.post('/messages', async (req, res) => {
    const {message, max, image} = req.body;

    const response = await openai.createCompletion({
        model: "text-davinci-003",
        prompt: `${message}`,
        temperature: 0,
        max_tokens: max,
        top_p: 1,
        frequency_penalty: 0.5,
        presence_penalty: 0,
        stop: ["\"\"\""],
    });
    const resp = await openai.createImage({
        prompt: `${image}`,
        n: 1,
        size: "1024x1024",
    });

    image_url = resp.data.data[0].url;

    res.json({
        url: image_url,
        message: response.data.choices[0].text
    });
            
        const searchTerms = [
            {
                title: 'TITLE HERE',
                link: 'https://ssur.uk/chatgpt/',
                description: '<img src="'+image_url+'"> '+response.data.choices[0].text,
                pubDate: new Date().toUTCString(),
                guid: 'https://ssur.uk/chatgpt/',
            }
        ];
        searchTerms.forEach(item => feed.item(item));

        fs.writeFileSync('feed.xml', feed.xml());
});


// const existingEntries = feed.items.map((item) => item.guid);

            // for (const searchTerm of searchTerms) {
            //     const searchTermHash = crypto
            //         .createHash('sha256')
            //         .update(searchTerm)
            //         .digest('hex');

            //     if (existingEntries.includes(searchTermHash)) continue;
                

            //     feed.item({
            //         title: searchTerm,
            //         description: text,
            //         url: image_url,
            //         guid: searchTermHash,
            //     });
            // }


