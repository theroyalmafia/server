#!/bin/bash

echo `sysbench --test=cpu --num-threads=4 --max-requests=20 --cpu-max-prime=20 run > gocpu.txt`
	
