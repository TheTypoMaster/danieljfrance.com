#Starter Project
This will get you set up a boilerplate Laravel project for use with the Larafish Framework package.

## First time setup
Make sure you have this setup in your ```~/.bash_profile```

```
# Local dev settings
export DB1_USER="root"
export DB1_PASS="root"
export DB1_HOST="localhost"
export DB1_PORT=""

# This function allows us to temporarily set up database for the current shell session
function database {
	if [ "$1" = "" ]
	then
		echo -e "${green}DB1_NAME =${nocolor} $DB1_NAME"
	else
		export DB1_NAME=$1
		echo -e "${lightcyan}DB1_NAME set to ${nocolor}$1"
	fi
}
export -f database
```

Then you will need to ```source ~/.bash_profile``` to load the new environment exports (or open a new terminal window)


