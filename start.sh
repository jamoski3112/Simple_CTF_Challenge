#!/bin/sh
 
sudo docker build -t ctf .
sudo docker run -d -p 2222:22 -p 80:80 ctf
sudo rm -rf www