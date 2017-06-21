#!/usr/bin/env bash

for srcFilePath in $(find "./exercises" -name "$1_*" ); do
  srcTestFilePath=$(echo $srcFilePath | sed s/exercises/tests/)
  if [ ! -f $srcTestFilePath ];then
    echo "test file not found for $srcFilePath ($srcTestFilePath)"
    continue
  fi

  newFilePath=$(echo $srcFilePath | sed s/$1/$2/)
  newTestPath=$(echo $srcTestFilePath | sed s/$1/$2/)

  mv $srcFilePath $newFilePath
  mv $srcTestFilePath $newTestPath
done