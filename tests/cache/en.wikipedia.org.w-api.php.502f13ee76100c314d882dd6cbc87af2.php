<?php
declare(strict_types = 1);

return [
    'headers' => [
        'Content-Location' => [
            'https://en.wikipedia.org/w/api.php?action=query&format=json&continue=&titles=Albert_Einstein&prop=extracts&exchars=1000',
        ],
    ],
    'statusCode' => 200,
    'reasonPhrase' => 'OK',
    'body' => '{"batchcomplete":"","warnings":{"extracts":{"*":"\\"exlimit\\" was too large for a whole article extracts request, lowered to 1.\\nHTML may be malformed and/or unbalanced and may omit inline images. Use at your own risk. Known problems are listed at https://www.mediawiki.org/wiki/Extension:TextExtracts#Caveats."}},"query":{"normalized":[{"from":"Albert_Einstein","to":"Albert Einstein"}],"pages":{"736":{"pageid":736,"ns":0,"title":"Albert Einstein","extract":"<p class=\\"mw-empty-elt\\">\\n\\n</p>\\n\\n<p class=\\"mw-empty-elt\\">\\n</p>\\n<p><b>Albert Einstein</b> (<span></span> <i title=\\"English pronunciation respelling\\"><span>EYEN</span>-styne</i>; <small>German: </small><span title=\\"Representation in the International Phonetic Alphabet (IPA)\\">[\\u02c8alb\\u025b\\u0281t \\u02c8\\u0294a\\u026an\\u0283ta\\u026an]</span> <span>(<span><span><span></span>listen</span></span>)</span>; 14 March 1879&#160;\\u2013 18 April 1955) was a German-born theoretical physicist who developed the theory of relativity, one of the two pillars of modern physics (alongside quantum mechanics). His work is also known for its influence on the philosophy of science. He is best known to the general public for his mass\\u2013energy equivalence formula <span><span><math xmlns=\\"http://www.w3.org/1998/Math/MathML\\" alttext=\\"{\\\\displaystyle E=mc^{2}}\\">\\n  <semantics>\\n    <mrow class=\\"MJX-TeXAtom-ORD\\">\\n      <mstyle displaystyle=\\"true\\" scriptlevel=\\"0\\">\\n        <mi>E</mi>\\n        <mo>=</mo>\\n        <mi>m</mi>\\n        <msup>\\n          <mi>c</mi>\\n          </msup></mstyle></mrow></semantics></math></span></span></p>..."}}}}',
];
