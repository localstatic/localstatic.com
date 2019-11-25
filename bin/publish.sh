#!/bin/sh

if [ "`git status -s`" ]
then
    echo "The working directory is dirty. Please commit any pending changes."
    exit 1;
fi

echo "Generating site ..."
hugo

echo "Updating gh-pages branch ..."
cd public && git add --all && git commit -m "publish to gh-pages (publish.sh)"

echo "Pushing to github ..."
git push --all
