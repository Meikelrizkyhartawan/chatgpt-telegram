import requests
import datetime
from env import *
import json

import openai

# telegram
def send_to_telegram(message):  
    apiURL = f'https://api.telegram.org/bot{apiToken}/sendMessage'
    response = requests.post(apiURL, json={'chat_id': chatID, 'text': message})

recent_time = 0
time = 0
recent_text = "0"


while True:
    time = datetime.datetime.now().strftime("%Y-%m-%d %H:%M:%S")

    json_time = [{"time" : time}]
    jsonString = json.dumps(json_time)
    jsonFile = open("data.json", "w")
    jsonFile.write(jsonString)
    jsonFile.close()

    json_time_data = open('data.json')
    data_time = json.load(json_time_data)
    # print(data_time[0]["time"])

    telegram_mesage_data = requests.get(f'https://api.telegram.org/bot{apiToken}/getUpdates?offset=-1')
    telegram_message_json = telegram_mesage_data.json()
    telegram_message = telegram_message_json["result"][0]["message"]["text"]
    telegram_message_split = telegram_message.split()
    if time != recent_time and recent_text != telegram_message and telegram_message_split[0] == "chatgpt" and time != data_time:
        engines = openai.Engine.list()

        completions = openai.Completion.create(
            engine='text-davinci-003',  
            prompt=telegram_message,          
            max_tokens=100,             
            n=1,                      
            stop=None,                 
        )

        message = completions.choices[0].text

        send_to_telegram(message)
        recent_time = time
        recent_text = telegram_message