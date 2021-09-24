for i in *.php;do
cat p2.txt $i >> temp && mv temp $i;
echo "  --> $i done"
done;