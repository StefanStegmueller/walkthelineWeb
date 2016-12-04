import requests

json = {
"roi_position": 254,
"roi_height": 34,
"path_position": 100,
"path_width": 32
}

url = 'http://192.168.188.146/upload.php'
files = {'file': open('03_ZweispurigBeimPass.jpg')}
response = requests.post(url, files=files, data=json)

print(response.text)

#import urllib2
#response = urllib2.urlopen("http://192.168.2.107/index.php")
#html = response.read()
