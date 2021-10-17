#This script has been created by Julian. (lyhan_jr@hotmail.com)
#
#!/bin/bash
temp=`ls`
for i in $temp; do
if [ -d "$i" ]; then files="$files $i"; fi
done
echo ------------------------------------------------------
for i in $files; do size=`du $i -sh | awk '{print $1}'` &&  printf "%-30s | %-30s\n" $i $size; done
echo ------------------------------------------------------
for i in $files; do size=`du $i -s | awk '{print $1}'` && total=$(($total + $size)); done
result_mb=`echo "scale=2;$total / 1024" | bc`
result_round=$((total/1024))
if [ $result_round -lt 1000 ]; then printf "%-30s | %-30s\n" "Total" $result_mb"Mb"
else
result_gb=`echo "scale=2;$result_mb / 1024" | bc`
printf "%-30s | %-30s\n" "Total" $result_gb"Gb"
fi

