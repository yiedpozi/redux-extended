# Field Options
## Checkbox
### Enable Select All/None
Add check-ability argument into field array to display select all and select none button on checkbox field.
<pre>$field = array(
    'id'            => 'opt_checkbox',
    'type'          => 'checkbox',
    'title'         => __('Checkbox Option', 'redux-framework-demo'), 
    'subtitle'      => __('No validation can be done on this field type', 'redux-framework-demo'),
    'desc'          => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
    'default'       => '1'// 1 = on | 0 = off
    'check-ability' => true, // true = enable | false = disable
);</pre>
