#!/usr/bin/env bash

apt autoremove -y 2&>1 >/dev/null
apt clean -y 2&>1 >/dev/null
apt autoclean -y 2&>1 >/dev/null

# Clear cache
rm -rf \
  /var/lib/apt/lists/* \
  /tmp/*

find /var/log -type f | while read f; do
    echo -ne '' > ${f} 2&>1 > /dev/null || true;
done
