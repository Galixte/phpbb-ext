# Tabbed profile view extension

## Install

1. Download the latest release.
2. Unzip the downloaded release, and change the name of the folder to `tabbedprofileview`.
3. In the `ext` directory of your phpBB board, create a new directory named `zyleta` (if it does not already exist).
4. Copy the `tabbedprofileview` folder to `/ext/zyleta/` (if done correctly, you'll have the main extension class at (your forum root)/ext/zyleta/tabbedprofileview/composer.json).
5. Navigate in the ACP to `Customise -> Manage extensions`.
6. Look for `Tabbed profile view` under the Disabled Extensions list, and click its `Enable` link.

## Uninstall

1. Navigate in the ACP to `Customise -> Extension Management -> Extensions`.
2. Look for `Tabbed profile view` under the Enabled Extensions list, and click its `Disable` link.
3. To permanently uninstall, click `Delete Data` and then delete the `/ext/zyleta/tabbedprofileview` folder.

## Add tabs

If You wanna add another element on tab, use event called `tabbed_profile_view_tablist_prepend` (if You wanna add a tab on first from right position) or `tabbed_profile_view_tablist_append` (first from left position).

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
If You added tab, You can add a content for it. Place it on event called `memberlist_view_contact_after` or `memberlist_view_contact_before`.

The code should looks like this:
```html
<fieldset id="{NAME_OF_YOUR_TAB}" class="fields2" role="tabpanel">
	<div class="panel bg2 tabstats">
		<div class="inner">
			{YOUR_CODE}
		</div>
	</div>
</fieldset>
```
`{NAME_OF_YOUR_TAB}` have to be the same as on adding a tab. Class `bg2` is just for better styling - same colour as others contents.

Class `tabstats` is just declared and coded, so it makes easiest to style Your code.

Class `inner` isn't coded, but it is default on phpBB, and makes a nicer look.

You can place Your code on place where `{YOUR_CODE}` is placed, it can be whatever You like, but You have to style it by Your own.


## License
[GNU General Public License v2](http://opensource.org/licenses/GPL-2.0)
