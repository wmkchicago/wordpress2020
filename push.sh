#!/bin/bash

DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" >/dev/null 2>&1 && pwd )"
REMOTE_PATH="~/www/wmkchicago.org/public_html/wp-content/themes/wmk2020"
rsync -a "$DIR/theme/" "wmkchicago.org:$REMOTE_PATH"