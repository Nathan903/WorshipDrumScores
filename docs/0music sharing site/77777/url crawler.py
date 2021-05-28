import pickle
import requests
url = 'https://god7777777.com/Uploads/Music/2017-12-08/5a2a0c1327789.mp3'
r = requests.get(url, allow_redirects=True)
print(r)
open('facebook.ico', 'wb').write(r.content)
