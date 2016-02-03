+++
date = "2012-09-27T03:17:13-04:00"
title = "How to create range indexes on mayan edms"

+++

During a recent installation of Mayan EDMS a specific need to classify receipts based on their different monetary amounts was brought up.  The desire was to organize receipts together based on their amounts but for specific ranges.  Thanks to Mayan EDMS automatic rule-based indexing this was a very easy task.

An index for receipts was created as any other index by going to the Setup menu, creating a new index, and creating a new tree template for that index.  Once on the tree template page a new child node was created.  The receipts had a metadata to hold their monetary quantity called quantity.  To create ranged index entries for these receipts was a simple mater of entering the follow Python expression in the child node’s indexing expression field:

    '%d - %d' % (int(metadata.quantity) / 100 * 100, int(metadata.quantity) / 100 * 100 + 100)

This created ranged entries in the index, on demand, for each receipt uploaded.  For example if uploading 3 receipts with the monetary quantities:  50, 190 and 870, the three index range entries created would be: 0-100, 100-200 and 800-900, and a link to each receipt would be placed inside the corresponding range entry.  If the monetary amount for any of the receipts were to be edited the index entries would be updated accordingly automatically.

Of all the DMS (document management system) products on the market, Mayan EDMS is the only one with this feature.  It allows maintaining an unlimited number of documents organized in an automatically created structure.  No more creating hierarchies and moving documents by hand, if you do that, why are you still using your DMS software?
