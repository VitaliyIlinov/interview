#!/usr/bin/env bash

# Exit the script if any statement returns a non-true return value
set -e

# The for loop throws an error in case of absence file.
# Thus we'll use if-condition here.
# Note: We don't use recursive search .
if [ -z "$(find /docker/entrypoint.d -maxdepth 1 -type f  -name \"*.sh\" 2>/dev/null)" ]; then
    for file in /docker/entrypoint.d/*.sh; do
        chmod +x ${file} || true;
        ${file};
    done
fi

exit 0