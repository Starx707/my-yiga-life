✨ 10/10/2025
[Will be updated soon]



✨ 12/10/2025
**///////////////////// Verion 1 - User stories & ERD /////////////////////**
User stories
As app user I want… (1) so that I…..(2)

⭕ <— missing

App user
(1) To be able to post a picture of my interaction in the game (2) share findings with others 
(1) To be able to add a location as to where I’ve taken it (2) /others can find the place too ⭕
(1) … add text to it to tell others what happened in the post (2) to describe/tell my story
(1) … make private posts just for me (2) can keep my profile public but not share all my content ⭕
(1) … to add tags (2) so they are easier to find ⭕
(1) … filter with tags on my own profile (2) can find posts easier
(1) … save posts I liked (2) can look them back up easier
(1) … decorate my profile (2) can distinguish myself from others
(1) … delete and edit posts (2) can have ‘control’ over my own content
(1) … have a username that’s not the only one (unique) (2) don’t have to create a nickname that doesn’t exist
(1) … enroll for a moderator roll (2) so I can help keeping the application and community afloat 
(1) … to know why posts are deleted/removed/archived by moderators (2) change my way of posting in the future or debate as to why I think they didn’t have the right to
(1) … make my own tags (2) can sort my own content better


Link and Admin
(1) … Delete posts (2) can keep the app user friendly 
(1) … Terminate accounts that have violated rules multiple times (2) don’t have to watch users who’ve had their chances like a hawk ⭕
(1) … Make announcement posts for users to read* (2)  can share upcoming updates and maybe even future events
(1) … See the flagged posts that are selected for deletion (2) can discuss with moderators and decide what will happen to these users ⭕

Moderator
(1) … Add filters and new tags people can add to posts (2) can help the community sort their content better
(1) …* (2) can share upcoming updates and maybe even future events
(1) … delete posts/flag posts for deletion (2) can keep the community free of users who don’t want to use it the way it’s intended ⭕


Other features without user story:
- Community favourite posts


“ERD”
** primary key
~ foreign key
++ Auto Increment

posts
ID (** ++) => BigInt
user_id (~) => BigInt
yiga_points => Int
Details => Varchar (300)
Likes => Int
Img => Varchar (200)

users
ID (** ++) => BigInt
username => string (30)
email => email
passw => password (20)
mod => bool 
pfp_pic => varchar 
banner => varchar 
liked_posts => varchar (it will be an array but that will be tackled in the code) 
date_joined => date

admins
ID (** ++) => BigInt
username => string
email =>  email
password => varchar 
liked_posts => varchar   

posts only have one user (or admin)
users have more then 1 post
Admins have more then 1 post  

Many to many is both tabels singular and words in alphabetical order 


✨ 14/10/2025
**///////////////////// Verion 2 - User stories & ERD => After feedback /////////////////////**
User stories
As app user I want… (1) so that I…..(2)

⭕ <— missing

App use
(1) To be able to post a picture of my interaction in the game (2) share findings with others 
(1) To be able to add a location as to where I’ve taken it (2) /others can find the place too 
(1) … add text to it to tell others what happened in the post (2) to describe/tell my story 
(1) … make private posts just for me (2) can keep my profile public but not share all my content 
(1) … to add tags (2) so they are easier to find 
(1) … filter with tags on my own profile (2) can find posts easier 
(1) … save posts I liked (2) can look them back up easier 
(1) … decorate my profile (2) can distinguish myself from others 
(1) … delete and edit posts (2) can have ‘control’ over my own content
(1) … have a username that’s not the only one (unique) (2) don’t have to create a nickname that doesn’t exist 
(1) … enroll for a moderator roll (2) so I can help keeping the application and community afloat 
(1) … to know why posts are deleted/removed/archived by moderators (2) change my way of posting in the future or debate as to why I think they didn’t have the right to
(1) … make my own tags (2) can sort my own content better

Link and Admin
(1) … Delete posts (2) can keep the app user friendly 
(1) … Terminate accounts that have violated rules multiple times (2) don’t have to watch users who’ve had their chances like a hawk ⭕
(1) … Make announcement posts for users to read* (2)  can share upcoming updates and maybe even future events
(1) … See the flagged posts that are selected for deletion (2) can discuss with moderators and decide what will happen to these users ⭕

Moderator
(1) … Add filters and new tags people can add to posts (2) can help the community sort their content better
(1) …* (2) can share upcoming updates and maybe even future events
(1) … delete posts/flag posts for deletion (2) can keep the community free of users who don’t want to use it the way it’s intended ⭕


Other features without user story:
- Community favourite posts

“ERD”
** primary key
~ foreign key
++ Auto Increment

posts
id (** ++) => BigInt
user_id (~) => BigInt
yiga_points => Int
details => Varchar (300)
likes => Int
img => Varchar (200)
location => varchar (50)
private => boolean  
 

users
id (** ++) => BigInt
username => string (30)
email => email
passw => password (20)
mod => bool 
pfp_pic => varchar 
banner => varchar 
liked_posts => varchar (it will be an array but that will be tackled in the code) 
date_joined => date

categories
id (** ++) => BigInt 
name => Varchar (30)

posts only have one user (or admin) => one to many
users have more then 1 post => one to many
Posts can only have one category but categories can be attached to more posts => one to many

Many to many is both tabels singular and words in alphabetical order 


✨ 15/10/2025


✨ 16/10/2025


✨ 17/10/2025


✨ 19/10/2025


✨ 20/10/2025


✨ 21/10/2025
.....
