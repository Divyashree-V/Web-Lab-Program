import re
states = "Mississippi Alabama Texas Massachusetts Kansas"
stateArr = states.split()
stateList = list()
for val in stateArr:
    if(re.search("xas$",val)):
       stateList.append(val)

for val in stateArr:
    if(re.search("^k.*s$",val,re.I)):
       stateList.append(val)

for val in stateArr:
    if(re.search("^M.*s$",val)):
       stateList.append(val)

for val in stateArr:
    if(re.search("a$",val)):
       stateList.append(val)

for val in stateList:
    print(val)

print(states)
