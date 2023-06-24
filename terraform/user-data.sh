#!/bin/bash
# Update the system
sudo yum update -y
# Install Docker
sudo yum install docker -y
# Start the Docker service
sudo service docker start
# Enable Docker to start on boot
sudo chkconfig docker on
# Add the ec2-user to the Docker group
sudo usermod -a -G docker ec2-users
# Install Git
sudo yum install git -y
# Install Docker Compose
sudo curl -L "https://github.com/docker/compose/releases/download/1.29.2/docker-compose-$(uname -s)-$(uname -m)" -o /usr/bin/docker-compose
# Make the Docker Compose binary executable
sudo chmod +x /usr/bin/docker-compose

cd /home/ec2-user
# Clone the repository
sudo git clone https://github.com/AshrafElshazly/Cloud-Based-Laravel-Solution
# Build and deploy the app using Docker Compose
cd /home/ec2-user/Cloud-Based-Laravel-Solution/src
sudo docker-compose up -d --build
