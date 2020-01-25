# Content Alert (CALERT) :: Drupal 8.x Module

## What am I looking at?

You are looking at a drupal module that allows users to subscribe for a content type on their http://website/user/<user-id>/edit

## How To Configure
Once under the user settings, the user will see the seting for "Content Alert"
followed by checkboxes of all the content types present at that time.

 Subscribe notifications for Article
 Subscribe notifications for blogs
 Subscribe notifications for Basic page
 
 The user can check which content types to subscribe for, and save the user settings.

## How it works
  * Whenever a new content type is created (or updated), the module will check for users that are subscribed for the content type of this new content
  * An email will be fired for users that match the content type

## What It Lacks / Future Updates
 * The fact that the email is sent immediately will not scale well on a website with many users and subscribers. This will require implementing a service/cron job/schedular
 * The administrator cannot see the number of subscribed users 
 * The administrator cannot subscribe or unsubscribe users directly
 * The module does not have an option to automatically subscribe all users


## Installation and Usage
Install it as you would for a regular drupal module. It has no dependencies (not even rules).

**That's it, you can extend this for your own usage**

## Requirements
Drupal 8.x core

### Author

**Anthony Ogundipe** a.k.a dhtml

### License

Licensed under the MIT License
 
