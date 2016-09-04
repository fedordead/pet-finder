# Pet Detectr

Web app for reporting lost or found pets.

## Set up instructions

1. Clone this repo

2. `npm install`

3. `npm start`

4. On Mac, download and install MAMP.

5. In your hosts file add the following: `127.0.0.1        petdetectr.local`

6. Visit `phpMyAdmin`

7. Create a new database called `petdetectr`

8. Load in the data dump found in pet detectr Slack channel

9. Run the apache server running (MAMP)

10. Visit [http://petdetectr.local/](http://petdetectr.local) in your browser


## Text editor instructions

If you're using Sublime Text please install the following plugins via Package Control:

* SublimeLinter
* [SublimeLinter-contrib-eslint](https://github.com/roadhump/SublimeLinter-eslint) - requires global install `npm install -g eslint`
* [SublimeLinter-contrib-stylelint](https://github.com/kungfusheep/SublimeLinter-contrib-stylelint) - [troubleshooting](http://sublimelinter.readthedocs.io/en/latest/troubleshooting.html#finding-a-linter-executable)
* [SublimeLinter-php](https://github.com/SublimeLinter/SublimeLinter-php)
* [EditorConfig](http://editorconfig.org/) (basics are we use 4 spaces to indent, not tabs)
