# How to use the master branch

We currently use the master branch to compare [upstream / incoming](https://github.com/magento/magento-cloud) changes to our customizations. This branch should have minimal changes required to run our modified applications, and no changes that do not exist across all our flavors.

# Merging

What should be reflected in the master branch? The default for our branches OR the current state of the upstream master?

In general, if it's a change that would logically exist across all our flavors (ref, demo, and b2b), use that.
This rule will make it harder to track deletions over time, but it's far more likely upstream will have additions than deletions.

# Tools & Steps for comparing

The vscode extension `Git Tree Compare` is great for comparing magento/master to pmet/master and then pmet/master to pmet/pmet-x.x.x-[ref|demo|b2b|blank].