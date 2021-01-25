Sometimes I need quick and dirty one-linner that I already used without going
through help or man page.

I use following function (in ~/.bashrc) to look up the command I'm looking for

```bash
function grepcmd
{
  grep -B1 -irh $1 ~/git/cmds
}
```
