# Redux Extended
Plugin to extend functionality on Redux Framework.

## Features
<ul>
    <li>
        Extend checkbox field
        <ul>
            <li>Select All/None</li>
        </ul>
    </li>
</ul>

## How To Use In Your Own Theme/Plugin?
<ol>
    <li>Extract plugin files into your theme/plugin directory.</li>
    <li>
        Require plugin core class in your theme/plugin function and ready to extend your options page functionality.
        <pre>require_once( dirname(__FILE__) . 'includes/redux_extended/redux-extended.php' );<br/>$plugin = ReduxExtended::extend( 'option-name' );</pre>
    </li>
    <li>There you go. That's it!</li>
</ol>

### Field Options
More: <a href="https://github.com/yiedpozi/redux-extended/blob/master/FIELD_OPTIONS.md">https://github.com/yiedpozi/redux-extended/blob/master/FIELD_OPTIONS.md</a>

## Changelog
<ul>
    <li>1.0.0 - Initial Release</li>
</ul>
