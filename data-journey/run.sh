#!/usr/bin/env bash
java -jar cli-0.0.1.jar ${@:0}
set -e

open 'log/index.html'

exit 0