#!/bin/bash
for ((i=0; i < 4900; i++))
do

a='{"token_id": "'
b='00", "token_owner_id": "'$ID'", "token_metadata": { "title": "Exploring Egyptian Tombs!", "description": "js13kb - Sculptures of Pharaohs", "media": "https://bafybeihql5tj2fzwwbpgwccq54jucgtauk762wlrx6i2orxf7i3ygmug6y.ipfs.nftstorage.link/image'
c='.png", "copies": 1}}'
d="${a}${i}${b}${i}${c}"

near call $ID nft_mint "${d}" --accountId $ID --deposit 10
done
















