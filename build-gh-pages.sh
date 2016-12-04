#!/bin/bash

git status
git add -A
git commit -m "modif text + tabs for carousels"
git push origin master
git checkout -b gh-pages
git checkout gh-pages
git rebase master
git push origin gh-pages
git checkout master
