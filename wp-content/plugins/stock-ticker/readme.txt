=== Stock Ticker ===
Contributors: urkekg
Donate link: https://urosevic.net/wordpress/donate/?donate_for=stock-ticker
Tags: widget, stock, ticker, securities, quote, financial, finance, exchange, bank, market, trading, investment, stock symbols, stock quotes, forex, nasdaq, nyse, wall street
Requires at least: 3.9.0
Tested up to: 4.5.3
Stable tag: 0.2.0.1
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Easy add customizable moving or static ticker tapes with stock information for custom stock symbols.

== Description ==

A simple and easy configurable plugin that allows you to insert stock ticker with stock price information (data provided by Google Finance). Insertion is enabled by shortcode or multi instance widget.

Stock Ticker is enhanced animated variation of [Stock Quote](https://wordpress.org/plugins/stock-quote/) plugin.

= Features =
* Configure default set of stock symbols that will be displayed in ticker
* Configure default presence of company as Company Name or as Stock Symbol
* Configure colours for unchanged quote, negative and positive changes with colour picker
* Disable scrolling ticker and make it static for individual ticker
* Tooltip for ticker item display company name, exchange and last trade date/time
* Define custom names for companies to be used instead symbols
* Define custom elements in visible change value
* Plugin uses native WordPress function to get and cache data from Google Finance for predefined duration of time
* Ready to be translated to non-english languages

Since version 0.1.5 you can set custom template for visible change value. Default format is `%company% %price% %change% %changep%`, and as a macro keywords you can use:
* `%exch_symbol%` - Symbol with exchange, like *NASDAQ:AAPL*
* `%symbol%` - Company symbol, like *AAPL*
* `%company%` - Company name after filtered by custom names, like *Apple Inc.*
* `%price%` - Price value, like *125.22*
* `%change%` - Change value, like *-5.53*
* `%changep%` - Change percentage, like *-4.23%*

For feature requests or help [send feedback](http://urosevic.net/wordpress/plugins/stock-ticker/ "Official plugin page") or use support forum on WordPress.

= Shortcode =
Use simple shortcode `[stock_ticker]` without any parameter in post or page, to display ticker with default (global) settings.

You can tune single shortcode with parameters:

* `symbols` - string with single or comma separated array of stock symbols
* `show` - string that define how will company be represent on ticker; can be `name` for Company Name, or `symbol` for Stock Symbol
* `static` - (boolean) to enable static unordered list instead scroling ticker set to `1` or `true`
* `nolink` - (boolean) to disable links for single quotes set to `1` or `true`
* `prefill` - (boolean) to start with pre-filled instead empty ticker set to `1` or `true`
* `duplicate` - (boolean) if there is less items than visible on the ticker, set this to `1` or `true` to make it continuous
* `class` - customize block look and feel set custom CSS class (optional)

= Example =

* Scrolling ticker
`[stock_ticker symbols="BABA,^DJI,EURGBP=X,LON:FFX" show="symbol"]`
* Static unordered list
`[stock_ticker symbols="BABA,^DJI,EURGBP=X,LON:FFX" show="symbol" static="1"]`
* Scrolling ticker w/o linked quotes
`[stock_ticker symbols="BABA,^DJI,EURGBP=X,LON:FFX" show="symbol" nolink="1"]`

== Installation ==

Easy install Stock Ticker as any other ordinary WordPress plugin

1. Go to `Plugins` -> `Add New`
1. Search for `Stock Ticker` plugin
1. Install and activate `Stock Ticker`
1. Configure default plugin options and insert shortcode `[stock_ticker]` to page or post, or `Stock Ticker` Widget to preferred Widget Area

== Screenshots ==

1. Global plugin settings page
2. Widget settings
3. Stock ticker in action
4. Live widget preview

== Frequently Asked Questions ==

= How to know which stock symbols to use? =

Visit [Google Finance](https://www.google.com/finance) and look for preferred symbols that you need/wish to display on your site.
For start you can try with AAPL,MSFT,IBM,CSCO,GOOG,YHOO,AMZN (Apple Inc; Microsoft Corporation; International Business Machines Corporation; Cisco Systems, Inc.; Google Inc; Yahoo! Inc; Amazon.com, Inc.)

= How to get Dow Jones Industrial Average? =

Since version 1.4.0 we use Google Finance, which support ^DJI exchange. To get quote for this exchange, simply add symbol `.DJI` or `^DJI`.

= How to get currency exchange rate? =

Use Currency symbols like `EURGBP=X` to get rate of `1 Euro` = `? British Pounds`

= How to get Crude Oil, Gold and other commodities? =

Unfortunately, Google Finance does not provide data for commodities (metals, energies, grains, meats, softs). That is why Stock Ticker can't provide quotes for them.

= How to get descriptive title for currency exchange rates? =

Add to `Custom Names` legend currency exchange symbol w/o `=X` part, like:

`EURGBP;Euro (€) ⇨ British Pound Sterling (£)`

= How to get sotck quotes from XZY Stock Exchange? =

First check does [Google Finance](https://www.google.com/finance) provides quotes from stock exchange you referring to. If it's supported, then look to next question to learn how to get stocks from there.
If Google Finance does not support your stock exchange, we are sorry but we can't help you at the moment.

= How to get proper stock price from proper stock exchange? =

Enter symbol in format `EXCHANGE:SYMBOL` like `LON:FFX`

= How to add Stock Ticker to header theme file? =

Add this to your template file (you also can add custom parameters for shortcode):

`<?php echo do_shortcode('[stock_ticker]'); ?>`

= Stock Ticker does not work with ION .com Insider plugin =

Trend Analysis WordPress Plugin ION.com Insider mess with content and change shortcode parameters before WordPress process shortcodes.

To avoid this, use Stock Ticker 0.1.4.6 or newer, and use in shortcodes single instead double quotes for parameters. Example:

`[stock_ticker symbols='BABA,^DJI,EURGBP=X,LON:FFX']`

= How to customize quote output? =

On Settings page for plugin you can set custom Value template. You can use macro keywords `%exch_symbol%`, `%symbol%`, `%company%`, `%price%`, `%change%` and `%changep%` mixed with HTML tags `<span>`, `<em>` and/or `<strong>`.

Default template is `%company% %price% %change% %changep%` but you can format it like:

`<span style="color:#333">%company%</span> <em>%price%</em> <strong>%change%</strong> %changep%`

= I set to show `%company%` but symbol is displayed instead =

Please note that Google Finance does not provide company name in retrieved feeds. You'll need to set company name in *Custom Names* field on plugin settings page.

= How to resolve error `Unfortunately, we could not get stock quotes this time`? =

This can be temporary problem. First try to access front-end page with appended parameter `?stockticker_purge_cache=1`.

If that does not help, next try to increase *Fetch Timeout* option on general plugin settings and then visit frontend page with appended address parameter `?stockticker_purge_cache=1`.

If you still experiencing issue, please contact us through [support forum](https://wordpress.org/support/plugin/stock-ticker) and don't forget to provide URL to your website where you have inserted Stock Ticker.

== Disclaimer ==

Data for Stock Ticker has provided by Google Finance and per their disclaimer, it can only be used at a noncommercial level. Please also note that Google has stated Finance API as deprecated and has no exact shutdown date.

[Google Finance Disclaimer](https://www.google.com/intl/en-US/googlefinance/disclaimer/#disclaimers)

Data is provided by financial exchanges and may be delayed as specified
by financial exchanges or our data providers. Google does not verify any
data and disclaims any obligation to do so.

Google, its data or content providers, the financial exchanges and
each of their affiliates and business partners (A) expressly disclaim
the accuracy, adequacy, or completeness of any data and (B) shall not be
liable for any errors, omissions or other defects in, delays or
interruptions in such data, or for any actions taken in reliance thereon.
Neither Google nor any of our information providers will be liable for
any damages relating to your use of the information provided herein.
As used here, “business partners” does not refer to an agency, partnership,
or joint venture relationship between Google and any such parties.

You agree not to copy, modify, reformat, download, store, reproduce,
reprocess, transmit or redistribute any data or information found herein
or use any such data or information in a commercial enterprise without
obtaining prior written consent. All data and information is provided “as is”
for personal informational purposes only, and is not intended for trading
purposes or advice. Please consult your broker or financial representative
to verify pricing before executing any trade.

Either Google or its third party data or content providers have exclusive
proprietary rights in the data and information provided.

Please find all listed exchanges and indices covered by Google along with
their respective time delays from the table on the left.

Advertisements presented on Google Finance are solely the responsibility
of the party from whom the ad originates. Neither Google nor any of its
data licensors endorses or is responsible for the content of any advertisement
or any goods or services offered therein.

== Changelog ==

= 0.2.0.1 (20160627) =
* (20160627) Add nofollow rel for quote links in ticker
* (20160608) Add prefilled and duplicate options
* (20160523) Add error catch for failed write to file in settings

= 0.2.0 (20160522) =
* (20160522) Change: Class name to CamelCase
* Change: Make unique settings section ID's
* (20160222) Add: Ticker Speed option to tune scrolling speed (pixels per second).
* Add: Default values for integer parameters during sanitization.
* Fix: Fetch timeout setting not sanitized on update.
* (20160218) Add: Options to enable and set timeout for auto refresh
* (20160127) Add: Log when new feed is fetched if WordPress debug is enabled.
* Remove: Deprecated constant WPAU_STOCK_TICKER_CACHE_TIMEOUT
* Enhance: Description for some options on global settings page.
* (20160119) Fix: Rename class `newsticker` to `stockticker`, `tickercontainer` to `stock-ticker-container` and  JS object `webTicker` to `stockTicker` to prevent clash with other newsticker libraries
* Fix: Shortcode ticker echoed before content
* Enhance: Rearange Settings page and remove loading of external paypal assets
* (20151103) Enhance AJAX call with status messages
* Remove: colours selectors fromwidget and shortcode; make only global colours
* Add: Load content through AJAX to be friendly with caching plugins
* Add: Cache custom styles based on options provided at plugin settings page
* Add: Option `class` for shortcode and widget to set custom CSS class and customize block
* Optimize: minify front JavaScript

= 0.1.7.1 (20151106) =
* Fix: wording on Settings page - typo for `mesage` and resource name from `Yahoo` to `Google`

= 0.1.7 (20151102) =
* Add: Option to set fetch timeout and tune/increase time to retrieve data from Google server on slow servers
* Add: URL parameter stockticker_purge_cache to force fetching live data from Google
* Add: Display WP Error Message as HTML comment when 'Unfortunately...' message is displayed, to help with debugging issue
* Change: Fetch data from Google through HTTPS connection
* Update: FAQ section

= 0.1.6 (20150804) =
* Add: Settings values sanitization
* Add: Link to community Support forum and Donate to plugin links in row on Plugins page
* Change: Value template on Settings page changed to textarea
* Change: Timeout field on Settings page changed to HTML5 number field
* Change: Ticker ID length reduced fro 8 to 4 characters
* Change: Move all core methods inside class
* Make code fully compliant to WordPress Coding Standard
* Update FAQ

= 0.1.5.1 (20150801) =
* Fix: Widget not initialized on PHP <5.3

= 0.1.5 (20150723) =
* Add: Option to set custom template for visible change value (global plugin settings)

= 0.1.4.8 (20150607) =
* Fix: Make available to work with our Stock Quote plugin

= 0.1.4.7 (20150415) =
* Add: Google Disclaimer to Settings page and README file (Other Notes)
* Add: Provide alternative for inline quotes with new plugin Stock Quote

= 0.1.4.6 (20150331) =
* Add: (20150331) Strip HTML tags from shortcode symbol parameter
* Add: (20150308) Set UL container padding to 0 (to avoid cut-off in some themes)

= 0.1.4.5 (20150308) =
* Fix: (20150308) Custom quote colours in static block
* Fix: (20150218) Set exact name of class to get class vars
* Add: (20150308) Option to disable link to Google Finance on each stock quote.
* Add: (20150122) Support for custom company names in format EXCHANGE:SYMBOL
* Add: (20150308) Non-minified webticker jQuery library
* Improve: (20150308) Ticker style LESS
* Test: (20150308) on WordPress 4.2-alpha-31677 and Twenty Fifteen

= 0.1.4.4 (20150110) =
* Add: Option to display static stock ticker as unordered list instead scrolling ticker.
* Fix: Same widget output because cached widget.
* Fix: Prevent `No data` ticker by converting wrong encoded characters in Google feed to single-byte ISO-8859-1

= 0.1.4.3 =
* Fix: Add stock exchange code to symbol link to prevent mixing stocks like CVE:CXB instead ASX:CXB
* Fix: Add special character replacement to support symbols with amps like NSE:M&M
* Fix: Cache safe widget in Customizer - preview immediately after inserting widget to widget area

= 0.1.4.2 =
* Fix: broken support for PHP pre-5.3 introduced in previous release: syntax error, unexpected T_PAAMAYIM_NEKUDOTAYIM, expecting ')'

= 0.1.4.1 =
* Fix: Previous update does not output in Enfold theme
* Fix: Prevent jumping by displaying unordered list before output become scrolling ticker
* Change: Add change value and change percent for currency exchange rates
* Change: Remove option to toggle custom company name because Google Finance does not have company name returned in JSON
* Add: More default Custom Names (^DJI and EURGBP=X)
* Add: Option to set custom style for ticker item (font family, weight, size)

= 0.1.4 =
* Change: Deprecated Yahoo! Finance as source (violating the Terms of Service of Yahoo with regards to the used data), replaced with Google Finance
* Change: No more Volume info in quote tooltip (as Google Finance does not provide that data)
* Change: Link chart on Google Finance instead Yahoo Finance
* Tested on WordPress 4.0+

= 0.1.3 =
* Fix: correct placement for shortcode output buffer
* Fix: ignored custom error message from settings page
* Change: remove dashicons requirement and use default Yahoo Finance down/up symbols
* Change: class for error message from .minus to .error
* Improvement: ignore symbol case for custom names matching
* Cleanup disabled parts of code, tiny optimizations

= 0.1.2 =
* Fix: missing argument on settings page for do_settings_fields()
* Change: replace jQuery stock renderer with native WordPress/PHP functions
* Change: strip null change, change percent and volume for currencies
* Optimize: move default settings to single wp_options entry
* Add: settings: timeout to cache downloaded quotes
* Add: settings: message to show when no quote can be downloaded
* Add: settings: field for custom company names and option to enable custom names

= 0.1.1.1 =
* Move: generated CSS and JS to footer
* Remove: ajax setup from stock-ticker.js library
* Optimize: minify stock-ticker.js library

= 0.1.1 =
* Add: stock parser message when fail fetching quotes
* Fix: initializing widget syntax error: unexpected T_FUNCTION
* Remove: closing PHP tags

= 0.1.0 =
* Initial public release

= 0.0.9 =
* Private release
* Improved reusable jQuery code

= 0.0.8 =
* Fix: usable colour picker in widgets after add new widget (before widget save)

= 0.0.7 =
* Add: configurable widget
* Add: help section to settings page

= 0.0.6 =
* Add: settings page

= 0.0.5 =
* Add: shortcode option show - what to dsplay in ticker (company name or stock symbol)

= 0.0.4 =
* Add: shortcode option for custom symbols set
* Add: shortcode option for custom colours (zero/minus/plus)

= 0.0.3 =
* Add: shortcode with embedded options

= 0.0.2 =
* packaged JS code to WordPress plugin

= 0.0.1 =
* developed JavaScript code for parsing stock data

== Upgrade Notice ==

= 0.1.2 =
Because we changed default options to single wp_options entry, after upgrade old defaults should be transformed to single entry. You can set custom names on settings page.

= 0.1.1 =
Fixed error for websites that run on PHP <5.3.0

= 0.1.0 =
Initial public release
