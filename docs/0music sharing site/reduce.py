import minify_html
import re
#https://stackoverflow.com/questions/2319019/using-regex-to-remove-comments-from-source-files
def removeComments(string):
    pattern = r"(\".*?\"|\'.*?\')|(/\*.*?\*/|//[^\r\n]*$)"
    # first group captures quoted strings (double or single)
    # second group captures comments (//single-line or /* multi-line */)
    regex = re.compile(pattern, re.MULTILINE|re.DOTALL)
    def _replacer(match):
        # if the 2nd group (capturing comments) is not None,
        # it means we have captured a non-quoted (real) comment string.
        if match.group(2) is not None:
            return "" # so we will return empty to remove the comment
        else: # otherwise, we will return the 1st group
            return match.group(1) # captured quoted-string
    return regex.sub(_replacer, string)

src = 'index_original.htm'
#src = 'index.html'

f = open(src,'r',encoding='utf-8')
s=f.read()
s=removeComments(s)
o=open('index.htm','w',encoding='utf-8')

s = s# minify_html.minify(s, minify_js=True, minify_css=True)
o.write(s)
o.close()
f.close()


