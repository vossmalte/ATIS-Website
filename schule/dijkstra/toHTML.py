def title(t):
    return "<h1>"+t+"</h1>"

def link(l):
    return "\n<br><a href="+l+".html>"+l+"</a>"


graph = open("graph.txt",'r')
lines = graph.readlines()
f=open(".tmp",'w')
for line in lines:
    if line[0]=="#":
        f.close()
        f=open(line[2:-1]+".html",'w')
        f.write(title(line[2:-1]))
    else:
        f.write(link(line[0])+": "+line[2]+"km")


graph.close()

