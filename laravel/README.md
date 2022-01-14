# Unc Inc Assessment - Laravel

This package contains the assessment for a typical Laravel project.

## Requirements

- Composer 1.x
- PHP 7.2.5+
- SQLite 3.8.8+
- PHP Code Sniffer
- SQLitebrowser (or similar)
- Git (preferably command line)
- Your editor of choice

## Installation

The directory contains a working setup of Laravel with local SQLite database storage. Unarchive the package into a directory, and do:

Install all packages:
```
$ composer install
```

Generate an encryption key:
```
$ php artisan key:generate
```

Create the database file:
```
$ touch database/database.sqlite
```

Copy the example `.env` file and edit it to reflect the correct settings:
```
$ cp .env.example .env
```

Create the database tables:
```
$ php artisan migrate
```

Run a local webserver:
```
$ php artisan serve
```

## Usage

You can confirm that the API is up-and-running, run the following command(s):

List all TODOs:
```
curl --location --request GET "http://127.0.0.1:8000/api/todo?api_token={YOUR-API-TOKEN}" --header "Accept: application/json"
```

Create a new TODO:
```
curl -i -X POST -H "Accept:application/json" -H "Content-Type:application/json" -d "{\"title\": \"Example Text\",\"description\": \"Test Example\"}" http://127.0.0.1:8000/api/todo?api_token={YOUR-API-TOKEN}

```

## Assignment

There are several RESTful web services for listing and creating TODOs. These are currently unprotected, anyone with access to the HTTP server can list and create TODOs. The assignment is to protect these endpoints using some sort of authentication. The goal is to have several applications have access to these endpoints, preferably with separate credentials, and a way of disallowing access to individual applications by revoking the rights.

## Rules

There is a small set of rules we would like you to adhere to:

- The project needs to be versioned using git. Please make us of a local git repository to keep track of your changes (You need to start a repo by using `git init`). We try to adhere to Conventional Commits as much as we can.
- Try to adhere to standards as much as you can. Use conventions set by the framework(s). Your code should follow the coding standards.
- Do not write unnecessary code. Use packages or libraries where you can.
- Do not spend too much time on this. Think practically, act as if a client is waiting for your changes.
- If you can not finish the assignment within a reasonable amount of time, just write down your train of thoughts and steps you would like to take. We are looking more into your approach, not so much perfect code.

## Hints

Some hints to help you along the way:

- We are looking for server-to-server authentication, not user authentication.
- The authentication should be the same for all routes. The authentication should be easy to use with both `POST` and `GET` requests.
- The assignment should not take more than about an hour, max two.

## Submission

Create an archive of the full project, including the `.git` folder and database and either email it or transfer it using e.g. WeTransfer or ToffeeShare.
Also do include a README or SOLUTION document explaining how you approaced the assignment, we are interested in your thoughts more than a perfect solution. 

