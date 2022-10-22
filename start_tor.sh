#!/bin/bash
apt install tor
rm -f ./temp/etc/tor/torrc

if [ -z "$PORT" ]
then
    echo -e "No PORT,Starting tor with  default port 4000 \n\n"
    PORT=4000
else
    echo -e "Ok, starting tor with $PORT \n\n"
fi
echo "HiddenServiceDir $PWD/temp/var/lib/tor/hidden_service" >> $PWD/temp/etc/tor/torrc
echo "HiddenServicePort 80 127.0.0.1:$PORT" >> $PWD/temp/etc/tor/torrc
chmod 700 $PWD/temp/var/lib/tor/hidden_service
tor -f $PWD/temp/etc/tor/torrc
