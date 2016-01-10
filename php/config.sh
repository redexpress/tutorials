#!/bin/bash
echo 'OS X version:' $(/usr/libexec/PlistBuddy -c 'Print :ProductVersion' /System/Library/CoreServices/SystemVersion.plist)
