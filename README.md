# Signaux sonores (plugin SPIP)

Modèle `<signal>` pour représenter à l'échelle des signaux sonores composés de
sons brefs et longs : corne de brume, sifflet de locomotive, klaxon, train horn,
signal de départ de régate.

```
<signal1|motif=- - o -|titre=Passage à niveau (États-Unis)>
<signal1|motif=o o o o o|long=5|titre=Doute ou danger (RIPAM 34 d)>
```

- `motif` : sons séparés par des espaces, `-` (ou `L`) pour un son long, `o` (ou `S`) pour un son bref
- `court`, `long` : durées relatives en secondes (1 et 3 par défaut)
- `titre` : légende

SPIP 4.0 à 4.4. Licence GPL v3. Train Horns Lab, 2026.
Documentation : article SPIP-Contrib (à venir). Contexte sur les avertisseurs
sonores portatifs : [Horn Guns](https://hornguns.com/).
