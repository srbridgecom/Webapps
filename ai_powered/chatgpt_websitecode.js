#srbridge.com
#https://github.com/srbridgecom
#https://www.facebook.com/srbridge
#https://www.linkedin.com/in/r-bridge-3baa332a4/

  JavaScript Code:

const apiKey = 'YOUR_API_KEY_HERE';
const url = 'https://api.openai.com/v1/engines/davinci-codex/completions';

const headers = {
  'Content-Type': 'application/json',
  'Authorization': `Bearer ${apiKey}`
};

const data = {
  prompt: 'Translate the following English text to French: "Hello, how are you?"',
  max_tokens: 60
};

fetch(url, {
  method: 'POST',
  headers: headers,
  body: JSON.stringify(data)
})
.then(response => response.json())
.then(result => {
  console.log(result);
})
.catch(error => {
  console.error('Error:', error);
});
