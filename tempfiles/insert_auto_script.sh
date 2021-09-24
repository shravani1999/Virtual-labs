#!bin/bash

    sed -n '/.*\"radio\"*/p' $2 | cut -d ">" -f3 | cut -d "<" -f1 > temp.txt
    i=0;
    j=1;
    a=1;
    b='a';
    
    while read p;do

    echo "insert into answer_$1 values ('$3$j$b', '$p');" >> $2.sql;

    i=`expr $i + 1`;
    if [ $b == 'a' ];then b='b';
    elif [ $b == 'b' ];then b='c';
    elif [ $b == 'c' ];then b='d';
    elif [ $b == 'd' ];then b='a'; fi;
    if [ $i -eq 4 ];then i=0; j=`expr $j + 1`; echo "" >> $2.sql; fi
    done < temp.txt
    echo "  --> $2  done";
    rm temp.txt;