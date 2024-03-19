import React, { Component } from 'react'
import { Text, View, Button, SafeAreaView, StyleSheet, TextInput} from 'react-native';

export default class Form extends Component {
    render() {
      return (
        <View>
            const TextInputExample = () => {
                return (
                    <SafeAreaView>
                    <TextInput
                        style={styles.input}
                        onChangeText={onChangeText}
                        value={text}
                    />
                    <TextInput
                        style={styles.input}
                        onChangeText={onChangeNumber}
                        value={number}
                        placeholder="Apellido"
                        keyboardType="numeric"
                    />
                    <TextInput
                        style={styles.input}
                        onChangeText={onChangeNumber}
                        value={number}
                        placeholder="Apellido"
                        keyboardType="numeric"
                    />
                    <TextInput
                        style={styles.input}
                        onChangeText={onChangeNumber}
                        value={number}
                        placeholder="Apellido"
                        keyboardType="numeric"
                    />
                    </SafeAreaView>
                );
            };
        </View>
      )
    }
  }


const styles = StyleSheet.create({
  input: {
    height: 40,
    margin: 12,
    borderWidth: 1,
    padding: 10,
  },
});

export default TextInputExample;