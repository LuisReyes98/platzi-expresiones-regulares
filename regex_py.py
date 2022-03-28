#!/usr/bin/python3.8

# Esa primer linea permite que en sistemas unix se ejecute el script
# si tiene permisos de ejecucion

import re

# 1876-03-04,Scotland,England,3,0,Friendly,Glasgow,Scotland,FALSE
pattern = re.compile(
    r'^([\d]{4})\-\d{2}\-\d{2},(.+),(.+),(\d+),(\d+),.*$')

f = open("./files/results.csv", "r", encoding="utf-8")

for line in f:
    res = re.match(pattern, line)
    if res:
        # print(f"{res.group(4)}\n")
        # print(f"{res.group(5)}\n")
        total_goles = int(res.group(4)) + int(res.group(5))
        if total_goles > 10:
            # print(line)
            print(
                f"Hubo {total_goles} goles, entre {res.group(2)} [{res.group(4)}] y {res.group(3)} [{res.group(5)}]")

f.close()
