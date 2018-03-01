# Notifiable User
This little plugin acts as a helper to add the `Illuminate\Notifications\Notifiable` trait to the `RainLab.User` `User` model.

## Why should I need this?
You can't extend a model directly with a trait, so using any trait on a third party model (like the `User` model) is just not possible without extending the `User` model and creating your own model isn't possible. 

## How does it work?
This plugin acts as a simple wrapper for the `Notifiable` trait and adds this as a `behavior` to the `User` model. It works by inserting the `trait` inside the `behavior` class. It then gets added to the `User` model during the `boot` method of the plugin. Simple as that.

## Dependencies
`RainLab.User` (doh!)
