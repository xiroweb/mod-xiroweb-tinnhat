#!/bin/sh

# A handy bash script to be executed only once on the extension-specific directories

EXTENSION_NAME="Xiroweb Tin nhat"
EXTENSION_ALIAS="xiroweb_tinnhat"
EXTENSION_CLASS_NAME="XirowebTinnhat"
EXTENSION_DESC="BIG Feature Article"
EXTENSION_NAMESPACE="Xiroweb"
TRANSLATION_KEY="XIROWEB_TINNHAT"

find $1 -name "*foo*" -type d -exec rename "s/foo/$EXTENSION_ALIAS/" {} \;
find $1 -name "*foo*" -type f -exec rename "s/foo/$EXTENSION_ALIAS/" {} \;
