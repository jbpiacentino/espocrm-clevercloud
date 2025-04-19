#!/bin/bash


# # Check if 'data' directory does not exist or is empty
# if [ ! -d "data" ] || [ -z "$(ls -A data)" ]; then
#   echo "Copying contents from original/data to data..."

#   # Create the 'data' directory if it doesn't exist
#   mkdir -p data

#   # Copy all files including hidden ones (dotfiles)
#   shopt -s dotglob
#   cp -a original/data/* data/
#   shopt -u dotglob

#   echo "Copy complete."
# else
#   echo "'data' directory already exists - assuming config is already set."
# fi

# # Check if 'custom' directory does not exist or is empty
# if [ ! -d "custom" ] || [ -z "$(ls -A custom)" ]; then
#   echo "Copying contents from original/custom to custom..."

#   # Create the 'custom' directory if it doesn't exist
#   mkdir -p custom

#   # Copy all files including hidden ones (dotfiles)
#   shopt -s dotglob
#   cp -a original/custom/* custom/
#   shopt -u dotglob

#   echo "Copy complete."
# else
#   echo "'custom' directory already exists - assuming config is already set."
# fi

# node stuff
npm install && npm run build
