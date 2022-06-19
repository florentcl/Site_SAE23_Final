#!/bin/bash

while true
do
	message=`mosquitto_sub -h 192.168.125.19 -t iut/# -C 1 -v`
	valeur=$(echo $message | cut -d "/" -f 4)
	type=$(echo $valeur | cut -d " " -f 1)
	valeur=$(echo $valeur | cut -d " " -f 2)
	salle=$(echo $message | cut -d "/" -f 3)
	batiment=$(echo $message | cut -d "/" -f 2)

	if [ $batiment == "bate" ]
	then
		if [ $salle == "E208" ]
		then
			if [ $type == "temperature" ]
			then
			capteur=TE208
			else 
			capteur=CE208
			fi
		else
			if [ $type == "temperature" ]
			then
			capteur=TE104
			else 
			capteur=CE104
			fi
		fi
	else
		if [ $salle == "B103" ]
		then
			if [ $type == "temperature" ]
			then
			capteur=TB103
			else 
			capteur=CB103
			fi
		else
			if [ $type == "temperature" ]
			then
			capteur=TB204
			else 
			capteur=CB204
			fi
		fi
	fi
mysql -u florent -ppassroot -h 192.168.125.19 -D SAE23 -e "Insert Into MESURE (MES_VAL, CAPT_NOM) VALUES ('$valeur', '$capteur');" 

done
