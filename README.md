# Wheat

## What is it?

Wheat is the starter-kit used to bootstrap most of Calotte's projects. It's filled with common patterns and basic stuff you see all around the Web. It is an ever evolving project where we upstream everything we think could be abstracted and reused for futur projects. While we do our best to keep the site usable as-is, it is not meant as a "theme" you can just use out of the box.

## What you'll need

Nothing fancy here. So once you have your favorite code editor in hands and a local environment running PHP 8.2, you are pretty much good to go. But here is our list of things and services we use from development to production.

- VScode
- Github
- XAMPP (or any PHP environment)
- Node / npm
- DigitalOcean (hosting)
- Ploi.io for server, site and devOps.

## What's in it?

We try to keep Wheat (and everything we do) as light and simple as possible. The obvious main parts of the project are:

- Kirby CMS
- HTMX
- Some javascript we use all the time for stuff like:
  - HTMX 404 and cache utilities
  - Basic scroll managment
  - Link management
  - Image loading
  - Intersecting
  - Loading
  - Menus
- WebComponents for everything we can.
- A bunch of CSS

We use `npm` to bundle some javascript and css but that's pretty much it. Everything is mostly done by hand as long as it's manageable.

## Installing PHP

One of the easiest way to run PHP on Apple Silicon is to use XAMPP. So go get it (and install it).
Once it's ready, open your Terminal and...

- Check what PHP version you are runing using `which php`.

Now, we just need to swap this over to the PHP that is installed with XAMPP, which is usually located at /Applications/XAMPP/bin

- `vim ~/.bash_profile`

Type `i` and then paste the following at the top of the file:

`export PATH=/Applications/XAMPP/bin:$PATH`
Hit ESC, Type :wq, and hit Enter

In Terminal, run `~/.bash_profile`

Run `which php` again and look for the updated version. If everything was successful, It should output the new path to XAMPP PHP install.

## Getting a new project up an running

1. Go to Github and create a new repo using `calotteca/wheat-kirby` as template.
2. Clone your new repo on your local machine.
3. Create a new branch called `develop`. This is where you'll do most of your work.
4. Run `composer start` to start your local server.
5. Go to `http://localhost:8000/panel` and create your account.
6. Add a page, and make sure you you use `home` as the slug.
7. If your website works at that point, you are done. Good job and have fun. I not, I'm sorry.

## Initial deployment & Ploi

Create a new site and enter your domain. In advanced settings, make sure your public folder and site root are set to `/`.
Select the Kirby CMS config from the dropdown.
Once your site is created, you can setup deployment using github. At that point it's just a matter of choosing the right branch and online you go.

## Deployments

You can deploy manually (by clicking Deploy) or setup automatic deployment in Ploy -> your site -> repo config.
Once setup, Ploi will deploy your site every time you complete a pull request to `main`.

## Cloudflare

[todo]

## Backups

Setting up automatic backup is done within Ploi and takes aboit 30 seconds. We use DigitalOcean Spaces so you'll need [these instructions]() to set it up the first time, but once it's done you simply have to...

- Go to **Backups**
- Click the **File** tab
- Click **Create**
- Select the server, site and proper config.
- Select your site
- Set Path to `/mydomain_com` (using your own domain)
- Interval and amount can be set at whatever you deem acceptable.
- If you are hosting a Kirby site, add `site/cache/*, site/sessions/*, media/*` in the Exclude field
- Hit Save

## Restoring a backup

[todo]

## Fathom Analytics

[todo]

## Password reset using Sendgrid

[todo]

## Kirby

Wheat being a starter site for Kirby CMS, we assume you already know quite a bit about the platform and won't go into details about it. Nevertheless, here's a bunch of links that might be usesul for everyone.

- **[getkirby.com](https://getkirby.com)** – Get to know the CMS.
- **[Documentation](https://getkirby.com/docs/guide)** – Read the official guide, reference and cookbook recipes.
- **[Discord](https://chat.getkirby.com)** – Hang out and meet the community.
- **[Forum](https://forum.getkirby.com)** – Whenever you get stuck, don't hesitate to reach out for questions and support.
