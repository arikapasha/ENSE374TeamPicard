# <h1 align="center">Rate My Music Source Code </h1>

## Installation Instructions
1) Use Bitnami to install the MAMP stack (on MacOS)
<img width="1334" alt="Screen Shot 2021-12-07 at 6 37 01 AM" src="https://user-images.githubusercontent.com/90287606/145031841-16766fa2-1329-40ea-b9c6-2fe3824d81d7.png">

2) Download the zip file of the source code for Rate My Music
3) Open the zip file and transfer all the files into the htdocs folder so the application will run on your local machine on localhost (find htdocs on MacOS: application &#8594; mampstack-7.4.25-0 &#8594; apache2 &#8594; htdocs)
4) Now open 'manage-osx' from your applications and now your localhost is running
5) From manage-osx, go to phpMyAdmin and create the databases
<img width="665" alt="Screen Shot 2021-12-07 at 6 58 40 AM" src="https://user-images.githubusercontent.com/90287606/145033438-fe41ac0a-2f0a-4dfc-9780-106f15a05373.png">

6) Create a RateMyMusic Database to store signup information (email, username and password columns), store the user ratings (rateID, username, songID, rating columns) and to store a music database (song, artist, songID and picture columns)
7) Now, the application should be fully functioning 
8) User Signup
![Screen_Shot_2021-12-05_at_11 52 14_AM](https://user-images.githubusercontent.com/90287606/145034297-203fa7c0-bc4e-4adc-bfa6-5c8024da22f2.png)

9) User Login
![Screen_Shot_2021-12-05_at_11 52 30_AM](https://user-images.githubusercontent.com/90287606/145034369-e5924158-01f6-424b-9604-2f7515d760cc.png)

10) Homepage (with five most recent ratings)
![Screen_Shot_2021-12-05_at_11 52 56_AM](https://user-images.githubusercontent.com/90287606/145034485-9180ac18-04d5-4255-9752-6989ab406f38.png)

11) Search for a song or artist 
![Screen_Shot_2021-12-05_at_11 53 32_AM](https://user-images.githubusercontent.com/90287606/145034692-336efd24-6c01-4050-bf27-c4e789ac715d.png)

12) Search for songs with "re" in song or artist name and rate 
![Screen_Shot_2021-12-05_at_11 53 55_AM](https://user-images.githubusercontent.com/90287606/145034773-64709932-2eaf-4265-bb8c-5647ea9bac39.png)

13) Add song to database
![Screen_Shot_2021-12-05_at_11 53 34_AM](https://user-images.githubusercontent.com/90287606/145034838-716f66bb-6b92-4595-88dc-d7def0509671.png)

14) Search through your ratings with keyword "taylor"
![Screen_Shot_2021-12-05_at_11 53 23_AM](https://user-images.githubusercontent.com/90287606/145034905-b79c050c-792f-4f0d-a359-61783fa68bdc.png)

15) All your ratings
![Screen_Shot_2021-12-05_at_11 53 14_AM](https://user-images.githubusercontent.com/90287606/145034993-bfed415f-ef3b-4e7f-8131-6eb10086d459.png)

