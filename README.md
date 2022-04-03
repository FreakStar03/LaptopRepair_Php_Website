
# Laptop Repair

A laptop repair webiste made with php

## Run Locally

Clone the project

```bash
  git clone https://github.com/FreakStar03/LaptopRepair_Php_Website
```

Go to the project directory

```bash
  cd LaptopRepair_Php_Website
```

Use Docker for Mysql Backend (LINUX) For Windows visit docker website

```bash
  sudo apt install docker
  sudo apt install docker-compose
  make docker
```

Run the app, After Docker Started

```bash
  make start
```

To Stop the Docker Container

```bash
  make docker-stop
```

To Start the Docker Container

```bash
  make docker-start
```

To Remove the Docker Container

```bash
  make docker-remove
```

To Backup Current DB

```bash
  make mysql-dump
```

To Restore Default DB

```bash
  make mysql-restore
```

## Tech Stack

* php
* jquery
* ajax
* bootstrap

## Authors

* [@Chirag Padyal](https://www.github.com/octokatherine)
