#!/bin/bash

#sudo rsync -arvh --delete /home/wsz/Desktop/Web/srv/ /srv/http/

ifconfig | grep inet | awk '{print $2}' | grep 192 | {

        read -r ip

                /bin/chromium --app="http://$ip/presta/admin361eb2qdf/"
                    echo '$ip' 
}