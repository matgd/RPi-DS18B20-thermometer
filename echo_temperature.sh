#!/bin/bash

cat /sys/bus/w1/devices/28-0316b317eaff/w1_slave | awk 'NR==2{print $10}' | sed -e 's/t=//g'
