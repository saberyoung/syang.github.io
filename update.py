from __future__ import print_function
from builtins import input
import glob,argparse,time,sys,os

addstr = '<tr align="center"><td>%s</td><td>%s</td><td>%s<br></td>\n'
addstr1 = '<a href="./%s">%s</a>'
indexfile1,indexfile2 = '',''
for nii,ii in enumerate(open('index.html').readlines()):
    if nii <= 13:indexfile1+=ii
    else:indexfile2+=ii

if __name__ == "__main__":
    start_time = time.time()
    parser = argparse.ArgumentParser(description='update web',\
                                     formatter_class=argparse.ArgumentDefaultsHelpFormatter)   
    parser.add_argument("trigger",help='trigger name')    
    args = parser.parse_args()

    _filelist,_imglist = [],[]
    for _ff in glob.glob('*'+args.trigger+'*'):
        if '.txt' in _ff:_filelist.append(_ff)
        elif '.png'in _ff:_imglist.append(_ff)
    if len(_filelist)>0 or len(_imglist)>0:
        os.remove('index.html')
        indexfilenew = open('index.html','w')
        _fileout,_imgout = '',''
        for nn,_list in zip([0,1],[_filelist,_imglist]):
            for _nll,_ll in enumerate(_list):
                if nn == 0:_fileout+=addstr1%(_ll,_ll)
                if nn == 1:_imgout+=addstr1%(_ll,_ll)
                if _nll<len(_list)-1:                
                    _fileout+='<br>'
                    _imgout+='<br>'    
        indexfile12 = addstr%(args.trigger,_fileout,_imgout)
        indexfilenew.write(indexfile1+indexfile12+indexfile2)
        indexfilenew.close()

        os.system('git add .')
        os.system('git commit -m "%s"'%args.trigger)
        os.system('git push')
