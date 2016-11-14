#!/bin/bash

git status
git add -A
git commit
git push origin master
git checkout -b gh-pages
git checkout gh-pages
git rebase master
git push origin gh-pages
git checkout master
