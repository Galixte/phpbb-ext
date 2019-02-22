# Tabbed stat-block extension

## Install

1. Download the latest release.
2. Unzip the downloaded release, and change the name of the folder to `tabbedstatblock`.
3. In the `ext` directory of your phpBB board, create a new directory named `zyleta` (if it does not already exist).
4. Copy the `tabbedstatblock` folder to `/ext/zyleta/` (if done correctly, you'll have the main extension class at (your forum root)/ext/zyleta/tabbedstatblock/composer.json).
5. Navigate in the ACP to `Customise -> Manage extensions`.
6. Look for `Tabbed stat-block` under the Disabled Extensions list, and click its `Enable` link.

## Uninstall

1. Navigate in the ACP to `Customise -> Extension Management -> Extensions`.
2. Look for `Tabbed profile view` under the Enabled Extensions list, and click its `Disable` link.
3. To permanently uninstall, click `Delete Data` and then delete the `/ext/zyleta/tabbedstatblock` folder.

#For extensions writers

## Add tabs

If You wanna add another element on tablist, use event called `tabbed_stat_block_tablist_append` (if You wanna add a tab on first from right position) or `tabbed_stat_block_tablist_prepend` (first from right position).

To add corectly new tab do it like this:
```html
<li id="{NAME_OF_YOUR_TAB}-tab" class="tab">
	<a href="#tabs" data-subpanel="{NAME_OF_YOUR_TAB}" role="tab" aria-controls="{NAME_OF_YOUR_TAB}">{L_NAME_OF_YOUR_TAB}</a>
</li>
```
and replace `{NAME_OF_YOUR_TAB}` with a name You would call this tab.

`{L_NAME_OF_YOUR_TAB}` is a displayed name on tab. It can be direct name, or can be from language file.

That's all what You did here. Now take a look at "Add content".

## Add content
If You added an item on tablist, You have to add a content for it. Place it on event called `tabbed_stat_block_tabpanel_append`.

The code should looks like this:
```html
<fieldset id="{NAME_OF_YOUR_TAB}" class="fields2 tab-stat-block" role="tabpanel">
	<div class="panel bg3">
		{YOUR_CODE}
	</div>
</fieldset>
```
`{NAME_OF_YOUR_TAB}` have to be the same as on adding a tab.

Class `bg3` is just for better styling - same colour as others tabpanels.

Class `tab-stat-block` is just for better styling - standard font-size.

You can place Your code where `{YOUR_CODE}` is placed, it can be whatever You like, but You have to style it by Your own if needed.

## License
[GNU General Public License v2](http://opensource.org/licenses/GPL-2.0)
