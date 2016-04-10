"=========-=-=-=-=-=-=-=-=-=-=-=-=--=-==================================================
set nocompatible "去掉有关vi一致性模式，避免以前版本的bug和局限  
"set nocp "去掉有关vi一致性模式，避免以前版本的bug和局限  
filetype plugin on "加载netrw管理文件系统
" =============================================================================
"        << 判断操作系统是 Windows 还是 Linux 和判断是终端还是 Gvim >>
" =============================================================================
 
" -----------------------------------------------------------------------------
"  < 判断操作系统是否是 Windows 还是 Linux >
" -----------------------------------------------------------------------------
let g:iswindows = 0
let g:islinux = 0
if(has("win32") || has("win64") || has("win95") || has("win16"))
    let g:iswindows = 1
else
    let g:islinux = 1
endif
 
" -----------------------------------------------------------------------------
"  < 判断是终端还是 Gvim >
" -----------------------------------------------------------------------------
if has("gui_running")
    let g:isGUI = 1
else
    let g:isGUI = 0
endif


"---------------------------------------------------------------------------------------
"php自动补全

au FileType php call AddPHPFuncList()
function AddPHPFuncList()
    set dictionary-=~/.vim/ExtraVim/php_funclist.txt dictionary+=~/.vim/ExtraVim/php_funclist.txt
set complete-=k complete+=k
endfunction

"如果你想让 Vim 在启动时最大化窗口，可以把下面的命令加到你的 vimrc 或 gvimrc 文件中: >
"au GUIEnter * simalt ~x
" 设置 gVim 窗口初始位置及大小
if g:isGUI
    "au GUIEnter * simalt ~x                           "窗口启动时自动最大化
    winpos 0 0                                     "指定窗口出现的位置，坐标原点在屏幕左上角
    set lines=84 columns=214                          "指定窗口大小，lines为高度，columns为宽度
endif

"设置所有数字为十进制，不管是否以0开头
set nrformats=

set shiftwidth=4 " 设定 << 和 >> 命令移动时的宽度为 4
set softtabstop=4 " 使得按退格键时可以一次删掉 4 个空格
set tabstop=4 " 设定 tab 长度为 4

"解决中文乱码
"set fileencodings=utf-8,gb2312,gbk,gb18030
"set termencoding=utf-8
"set encoding=prc
"set encoding=utf-8
"set fenc=utf-8

"语言设置
set enc=utf-8
set fencs=utf-8,ucs-bom,shift-jis,gb18030,gbk,gb2312,cp936
set langmenu=zh_CN.UTF-8
language message zh_CN.UTF-8
set termencoding=utf-8
set helplang=cn

"set swapfile
"set dir=/User/lstmango/.vim/bakcode/swp

"显示行号
set number

"语法高亮度显示
syntax on     


      
 "在编辑过程中，在右下角显示光标位置的状态行                       
set ruler            
                     
set guioptions-=T " 隐藏工具栏
set guioptions-=m " 隐藏菜单栏

"设置匹配模式，类似当输入一个左括号时会匹配相应的右括号      
"set showmatch                     

" 设置自动缩进 
set ai!  
"vim使用自动对齐，也就是把当前行的对齐格式应用到下一行(自动缩进）
set autoindent                       
"（cindent是特别针对 C语言语法自动缩进）
set cindent     
"依据上面的对齐格式，智能的选择对齐方式，对于类似C语言编写上有用   
set smartindent                    

"设置字体，字号

if g:islinux
	"set guifont=新宋体\ 10
	set guifont=YaHei\ Consolas\ Hybrid\ 10
	"set guifont=DejaVu\ Sans\ Mono\ 10
else
	set guifont=新宋体:h10
endif

"set cursorline " 突出显示当前行

set autochdir " 自动切换当前目录为当前文件所在的目录

"set ignorecase smartcase " 搜索时忽略大小写，但在有一个或以上大写字母时仍保持对大小写敏感
set noignorecase " 搜索时忽略大小写，但在有一个或以上大写字母时仍保持对大小写敏感
set nowrapscan " 禁止在搜索到文件两端时重新搜索
set incsearch " 输入搜索内容时就显示搜索结果
set hlsearch " 搜索时高亮显示被找到的文本

set noerrorbells " 关闭错误信息响铃
set novisualbell " 关闭使用可视响铃代替呼叫
set t_vb= " 置空错误铃声的终端代码

set backspace=indent,eol,start
" 不设定在插入状态无法用退格键和 Delete 键删除回车符
" set cmdheight=1 " 设定命令行的行数为 1
set laststatus=1 " 显示状态栏 (默认值为 1, 无法显示状态栏)

"选择配色方案
set background=dark
set t_Co=256 
colorscheme gruvbox

"设置命令自动补全为列表
"set wildmode=longest,list

"设置命令补全菜单
set wildmenu
set wildmode=full

set history=200 "提高命令保存上限

cnoremap <expr> %% getcmdtype() == ':' ? expand('%:h').'/' : '%%' 
"当在命令输入%%自动展开活动的缓冲区的目录的路径=%:h<tab>

noremap <Up> <Nop>
noremap <Down> <Nop>
noremap <Left> <Nop>
noremap <Right> <Nop> 
"禁用光标上下左右键

"set pastetoggle=<f4> "启用F5键粘贴系统粘贴来的内容格式不乱，使用后需再按F5关闭

set hidden " 允许在有未保存的修改时切换缓冲区，此时的修改由 vim 负责保存

"更改备份文件目录??????????????????????????????????????????????????????????????????????????????
"生成备份文件”
"set backup 
"重新命名备份文件的后缀为.bak” 备注: 如果°backup°选项是关闭的但°writebackup°选项是打开的, Vim还会生成一个备份文件. 但是, 一旦该文件被成功地保存它就会被自动删除.
"et backupext=.bak 
"对原始文件进行备份”
"set patchmode=.orig 
"指定对原始文件进行备份的后缀”
"et backupext=.old 

"et backupdir=/User/lstmango/.vim/bakcode
"指定swp生成路径
"et directory=/User/lstmango/.vim/bakcode/swp
"--------------------------------------ctags设置
"自动切换目录
set autochdir
"自动查找
set tags=tags;
""""""""""""""""""""""""""""""
" Tag list (ctags)
""""""""""""""""""""""""""""""
"if MySys() == "windows"                "设定windows系统中ctags程序的位置
"let Tlist_Ctags_Cmd = 'ctags'
"elseif MySys() == "linux"              "设定linux系统中ctags程序的位置
"let Tlist_Ctags_Cmd = '/usr/bin/ctags'
"endif
let Tlist_Show_One_File = 1            "不同时显示多个文件的tag，只显示当前文件的
let Tlist_Exit_OnlyWindow = 1          "如果taglist窗口是最后一个窗口，则退出vim
let Tlist_Use_Left_Window = 1         "在左侧窗口中显示taglist窗口
"let Tlist_Use_Right_Window = 1         "在右侧窗口中显示taglist窗口
"let Tlist_Auto_Open = 1 "在启动VIM后，自动打开taglist窗口

" 设置winmanager
" 设置界面分割
"let g:winManagerWindowLayout = "FileExplorer|TagList"
let g:winManagerWindowLayout = "TagList"
"设置winmanager的宽度，默认为25
let g:winManagerWidth = 30
"定义打开关闭winmanager快捷键为F8
"nmap <silent> <F8> :WMToggle<cr>
nmap <silent> <A-8> :WMToggle<cr>
"在进入vim时自动打开winmanager,1为自动，0为不启动
let g:AutoOpenWinManager = 0

"当高亮搜索到的所有字符时候，按ctrl+l暂时关闭高亮
nmap <silent> <C-c> :nohlsearch<cr>
"显示搜索个数，即行数
nmap <silent> <C-s> :%s///gn<cr>
"--------------------------------------cscope设置
"添加cscope.out
	"win运行
	"dir /s /b *.php *.inc *.module > cscope.files
	"dir /s /b *.php *.tpl *.html *.htm *.inc *.module > cscope.files
	"cs a E:\wamp\www\zbjno28zpbk_2\cscope.out
	"cscope -Rbkq
"cs a E:\web\zbjv6\cscope.out
"cs add /data/www/html/zbjv6/cscope.out
set nocst    "在cscope数据库添加成功的时候不在命令栏现实提示信息.
set cspc=6 "cscope的查找结果在格式上最多显示6层目录.
let g:autocscope_menus=0 "关闭autocscope插件的快捷健映射.防止和我们定义的快捷键冲突.
set cscopequickfix=s-,c-,d-,i-,t-,e-  

"s:查找即查找C语言符号出现的地方
nmap <A-s> :cs find s <C-R>=expand("<cword>")<CR><CR>
"g:查找函数、宏、枚举等定义的位置
nmap <A-g> :cs find g <C-R>=expand("<cword>")<CR><CR>
"c:查找光标下的函数被调用的地方
nmap <A-c> :cs find c <C-R>=expand("<cword>")<CR><CR>
"t: 查找指定的字符串出现的地方
nmap <A-t> :cs find t <C-R>=expand("<cword>")<CR><CR>
"e:egrep模式查找,相当于egrep功能
nmap <A-e> :cs find e <C-R>=expand("<cword>")<CR><CR>
"f: 查找文件名,相当于lookupfile
nmap <A-f> :cs find f <C-R>=expand("<cfile>")<CR><CR>
"i: 查找当前文件名出现过的地方
nmap <A-i> :cs find i ^<C-R>=expand("<cfile>")<CR>$<CR>
"d: 查找本当前函数调用的函数
nmap <A-d> :cs find d <C-R>=expand("<cword>")<CR><CR>

"
"
"kk
"--------------------------------------

"更改在当前行执行上次的替换命令可以在可视模式下按&键，替换高亮选取里面内容
nnoremap & :&&<CR>
xnoremap & :&&<CR>

autocmd FileType javascript set omnifunc=javascriptcomplete#CompleteJS
"-------------------------------------------------------------------------插件管理
"BundleList 显示配置文件安装插件列表
"BundleInstall 安装所有配置文件中的插件
filetype off
"此处规定Vundle的路径
set rtp+=~/.vim/bundle/vundle/
"此处规定插件的安装路径
call vundle#rc()
Bundle 'gmarik/vundle'

Bundle 'scrooloose/nerdtree'
"imap <F9> <ESC>:NERDTreeToggle<CR>
" nerdtree settings
"autocmd vimenter * NERDTree
"autocmd StdinReadPre * let s:std_in=1
"autocmd VimEnter * if argc() == 0 && !exists("s:std_in") | NERDTree | endif
"map <silent> <F2> :NERDTreeToggle<CR>
nmap <silent> <F2> :NERDTreeToggle<CR>
"autocmd bufenter * if (winnr("$") == 1 && exists("b:NERDTreeType") && b:NERDTreeType == "primary") | q | endif

"Bundle 'AutoComplPop'
"html,css自动提示
Bundle 'NeoComplCache'
let g:neocomplcache_enable_at_startup = 1
"自动补全插件
"Bundle 'Valloric/YouCompleteMe'
"let g:ycm_global_ycm_extra_conf='~/.vim/bundle/YouCompleteMe/third_party/ycmd/cpp/ycm/.ycm_extra_conf.py'
"替换字符位置:%S/{aaa,bbb}/{bbb,aaa}/g
Bundle 'abolish.vim' 
"选中*#
Bundle 'nelstrom/vim-visual-star-search'

"代码注释插件The NERD Commenter
Bundle 'scrooloose/nerdcommenter' 
"Buffer Explorer / Browser 缓冲区浏览器
Bundle 'jlanzarotta/bufexplorer' 
"Calendar 日历插件
"Bundle 'mattn/calendar.vim' 
"mru 插件(感觉和ubfexplorer差不多)
"Bundle 'yegappan/mru'

"不能用预览图
"Bundle 'Twinside/vim-codeoverview'
"没用起
"Bundle 'HTML-AutoCloseTag'
"
"xdebug+DBGP
"Bundle 'brookhong/DBGPavim'
"不在入口处停下
"let g:dbgPavimPort = 9009
"let g:dbgPavimBreakAtEntry = 0
"let g:debuggerMaxDepth = 5

"ctrl+p模糊搜索
Bundle 'ctrlpvim/ctrlp.vim'
let g:ctrlp_working_path_mode = 'cra'

"批量执行，高亮后C-n C-x跳过 C-p上一个 
Bundle 'terryma/vim-multiple-cursors'

"git vim
Bundle 'sjl/gundo.vim'
nmap <silent> <A-6> :GundoToggle<CR>

"语法检测
Bundle 'scrooloose/syntastic'
set statusline+=%#warningmsg#
set statusline+=%{SyntasticStatuslineFlag()}
set statusline+=%*
let g:syntastic_always_populate_loc_list = 1
let g:syntastic_auto_loc_list = 1
let g:syntastic_check_on_open = 1
let g:syntastic_check_on_wq = 0
let g:syntastic_php_checkers = ['php', 'phpcs', 'phpmd']

"Bundle 'vim-scripts/cmdline-completion'

"高亮模糊匹配（没配置成功）
"Bundle 'haya14busa/incsearch.vim'
"let g:incsearch#auto_nohlsearch = 1
"map n  <Plug>(incsearch-nohl-n)
"map N  <Plug>(incsearch-nohl-N)
"map *  <Plug>(incsearch-nohl-*)
"map #  <Plug>(incsearch-nohl-#)
"map g* <Plug>(incsearch-nohl-g*)
"map g# <Plug>(incsearch-nohl-g#)

"Bundle 'vim-scripts/grep.vim'
"太棒了，光标快速定位
Bundle 'Lokaltog/vim-easymotion'
"let g:EasyMotion_leader_key = 'f'
nmap f <Plug>(easymotion-s)
"map  / <Plug>(easymotion-sn)
"omap / <Plug>(easymotion-tn)
"map  n <Plug>(easymotion-next)
"map  N <Plug>(easymotion-prev)

"let g:EasyMotion_leader_key = 'f'
"nmap s <Plug>(easymotion-s2)
"nmap t <Plug>(easymotion-t2)
"map  / <Plug>(easymotion-sn)
"omap / <Plug>(easymotion-tn)
"map  n <Plug>(easymotion-next)
"map  N <Plug>(easymotion-prev)
"map <Leader>l <Plug>(easymotion-lineforward)
"map <Leader>j <Plug>(easymotion-j)
"map <Leader>k <Plug>(easymotion-k)
"map <Leader>h <Plug>(easymotion-linebackward)
"let g:EasyMotion_startofline = 0 " keep cursor colum when JK motion

"nmap s <Plug>(easymotion-s)
"" Bidirectional & within line 't' motion
"omap t <Plug>(easymotion-bd-tl)
"" Use uppercase target labels and type as a lower case
"let g:EasyMotion_use_upper = 1
 "" type `l` and match `l`&`L`
"let g:EasyMotion_smartcase = 1
"" Smartsign (type `3` and match `3`&`#`)
"let g:EasyMotion_use_smartsign_us = 1



filetype plugin indent on
"-------------------------------------------------------------------------自定义快捷键
"tab切换
"nmap <silent> <C-n> :tabn<cr>
"nmap <silent> <C-p> :tabp<cr>
"tab切换备用
nmap <silent> <C-l> :tabn<cr>
nmap <silent> <C-h> :tabp<cr>
"tabe
nmap <silent> <C-n> :tabe<cr>
"quickfix 上下切换
nmap <silent> <C-j> :cn<cr>
nmap <silent> <C-k> :cp<cr>

"nmap <silent> :E<cr> :Explore<cr>
"-------------------------------------------------------------------------自定义快捷键
" C的编译和运行 
map <F5> :call CompileRunGcc()<CR> 
func! CompileRunGcc() 
exec "w" 
"exec "!gcc % -o %<" 
"exec "!gcc-3 % -o %<" 
"C90编译
exec "!gcc -std=c99 % -o %<" 
"C99编译
exec "! ./%<" 
endfunc 
