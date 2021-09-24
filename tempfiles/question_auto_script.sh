#!bin/bash

sed -n '/.*\<p>[1-8].\"*/p' $2 | cut -d ">" -f2 | cut -d "<" -f1 | cut -b 4- > temp.txt

j=1;

while read p;do
echo "insert into questions_$1 values ( '$3$j', '$p', '$3$j');" >> $2.sql;
j=`expr $j + 1`;
done < temp.txt
echo "  --> $2  done";
rm temp.txt;